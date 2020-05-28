window.Vue = require('vue');

const app = new Vue({
    el: '#appDelete',
    methods: {
        setDeleteForm(url) {
            document.forms.formDelete.action = url;
            document.forms.formDelete.submit();
        },
    },
});
