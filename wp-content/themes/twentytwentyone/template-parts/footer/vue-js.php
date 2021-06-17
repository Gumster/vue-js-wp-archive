<!-- Load Vue js -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
	var app = new Vue({
	    el: '#app',
        data: {
            total_posts: 0,
            total_pages: 0,
            paged: 1, // WP REST begins at 1
            posts: null // empty to begin with
        },
        methods: {
            paginate(num){
                if(parseInt(num) * parseInt(num) === 1){ // increment or decrement
                    this.paged = this.paged >= 1 ? parseInt(num) + parseInt(this.paged) : 1;
                }
                else{ // first or last
                    this.paged = !parseInt(num) ? 1 : num;
                }
                this.fetchPage();
            },
            fetchPage(){
                console.log('Fetching page '+this.paged)
                fetch('/wp-json/wp/v2/posts/?page='+this.paged)
                .then(response => {
                    var headers = response.headers;
                    this.total_posts = headers.get('x-wp-total');
                    this.total_pages = headers.get('x-wp-totalpages');
                    return response.json();
                })
                .then(json => {                
                    this.posts = json;
                })                
            }
        },
        mounted: function() {
            this.fetchPage();
        }
	});
</script>