Vue.component('lang', {
	props: ['name'],
    template: `<button class="btn btn-sm btn-primary" @click="$emit('language')" > {{ name }} </button>`,
});

new Vue({
    el: '#app',
    methods: {
        changeLanguage: function (language) {
        	language == 'en' ? value = 'es' : value = 'en';
            axios.post('/'+value+'/config-language/', {
                lang: language
            })
            .then(function (response) {
                window.location = response.data;
            });
        },
    }
});
