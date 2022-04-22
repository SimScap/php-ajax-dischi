const app = new Vue(
    {
        el: '#app',
        data: {
            music : []
        },
        created() {
            axios.get('http://localhost/php-ajax-dischi/server/controller.php').then(
                (result) => {
                    this.music = result.data.results;
                }).catch((error) => {
                    console.warn(error);
                })
        },
    }
)