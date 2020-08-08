import AppForm from '../app-components/Form/AppForm';

Vue.component('post-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                //your regular form inputs
                title:  this.getLocalizedFormDefaults(),
                perex:  this.getLocalizedFormDefaults()
            },
            mediaCollections: ['gallery']
        }
    }

});
