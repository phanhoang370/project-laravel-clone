<template>
    <div class="ui menu">
        <div class="ui container">
            <router-link to="/" class="item"><i class="dashboard icon"></i> Dashboard</router-link>
            <div class="ui simple dropdown item">
                <i class="write icon"></i> Posts <i class="dropdown write"></i>
                <div class="menu">
                    <router-link to="/posts/create" class="item">Create New Post</router-link>
                </div>
            </div>
        </div>

        <div class="right menu">
            <a href="#" class="ui right aligned item" @click.prevent="logout">Logout</a>
        </div>
    </div>
</template>

<script type="text/javascript">
export default {
    methods: {
        logout() {
            this.$emit('loading');
            axios.post('/logout').then(response => {
                location.reload();
            }).catch(error => {
                location.reload();
            });
        }
    }
}
</script>
