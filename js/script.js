const app = new Vue(
    {
        el: '#app',
        data: {
            music : []
        },
        created() {
            axios.get('').then(
                (result) => {
                    this.music = result.data.results;
                }).catch((error) => {
                    console.warn(error);
                })
        },
    }
)