<template>
    <div>
        <div ref="editorRef" class="vditor-container"></div>
    </div>
</template>

<script>
import { defineComponent, onMounted, ref } from 'vue'
import Vditor from 'vditor'

export default defineComponent({
    name: 'MarkdownEditor',
    props: {
        onChange: {
            type: Function,
            required: true
        }
    },
    setup(props) {
        const editorRef = ref(null)
        let vditorInstance = null

        onMounted(() => {
            if (editorRef.value) {
                vditorInstance = new Vditor(editorRef.value, {
                    height: 400,
                    mode: 'ir',
                    lang: 'en_US',
                    cache: { enable: false },
                    after: () => {
                        console.log('Editor is ready');
                        props.onChange('Type something...')
                    },
                    input: () => {
                        console.log('Editor Changes');
                        if (vditorInstance) {
                            // Setiap kali ada perubahan, ambil value dan kirim ke parent
                            const content = vditorInstance.getValue()
                            props.onChange(content)
                        }
                    }
                })
            }
        })

        return { editorRef }
    }
})
</script>

<style>
.vditor-container {
    width: 100%;
}
</style>