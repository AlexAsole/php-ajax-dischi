new Vue({
    el: '#root',
    data: {
        diskList: []
    },
    mounted() {
        const self = this;
        axios
            .get("http://localhost/github/php-ajax-dischi/app/app.php")
            .then(function(resp) {
                let disks = resp.data;
                self.diskList = disks;
            })
    }
});

Vue.config.devtools = true;