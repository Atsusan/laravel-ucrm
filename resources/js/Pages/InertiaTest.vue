<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import {ref} from 'vue'

const newTitle = ref('')
const newContent = ref('')

</script>
<template>
Inertia Test<br>
<a href="/">aタグ経由です</a><br>
<link href="/">linkタグ経由です</link><br>
<Link :href="route('inertia.index')">名前付きルートの確認です</Link><br>
<Link :href="route('inertia.show',{id:100})"> ルートパラメータのテストです</Link><br>

<div class="mb-8"></div>
<input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
<input type="text" name="newContent" v-model="newContent">{{ newContent }}<br>
<Link as="button" method="post" :href="route('inertia.store')"
:data="{
    content: newContent,
    title: newTitle,
}"
>DB保存テスト</Link>
</template>