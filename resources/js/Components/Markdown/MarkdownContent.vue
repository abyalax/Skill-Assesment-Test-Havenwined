<template>
    <div class="prose text-white">
        <vue-markdown :source="source" />
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import VueMarkdown from 'vue-markdown-render'

export default defineComponent({
    name: 'MarkdownContent',
    components: { VueMarkdown },
    props: {
        source: {
            type: String,
            default: '# header'
        }
    },
    setup(props) {
        return { source: props.source }
    }
})
</script>