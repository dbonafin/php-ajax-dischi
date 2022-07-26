var app = new Vue(
    {
        el: '#my-app',
        data: {
            albums: [],
        },
        methods: {
            getAlbums() {
                axios.get('http://localhost:8888/php-ajax-dischi/my_api.php')
                .then((response) => {
                    this.albums = response.data;
                }   
            )}
        },
        mounted() {
            this.getAlbums();
        }
    }
)