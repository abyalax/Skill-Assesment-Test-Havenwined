<script setup>
import Carousel from '@/Components/Carousel.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { usePage } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';

console.log(usePage().props);

const { props } = usePage();
const { nama, company } = props
const { name, whatsapp, banner, email, description } = company
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <p class="text-gray-900">Halo {{ nama }}, You're logged in!</p>

                    <Carousel :images="banner" />

                    <h1>Detail Company Profile</h1>
                    <div class="p-6 border-2 border-slate-300 grid grid-cols-5 rounded-lg">
                        <div class="col-span-1">
                            <h4>Name</h4>
                            <h4>Description</h4>
                            <h4>Email</h4>
                            <h4>Whatsapp</h4>
                        </div>
                        <div class="col-span-4">
                            <p class="text-md">: {{ name }}</p>
                            <p class="text-md text-balance">: {{ description }}</p>
                            <p class="text-md">: {{ email }}</p>
                            <p class="text-md">: {{ whatsapp }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
