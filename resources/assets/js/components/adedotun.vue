<template>
  <span>{{ formatter[fn](value, Adedotun) }}</span>
</template>
<script type="text/javascript">

// eslint-disable-next-line
/* eslint-disable */
/* eslint-disable no-new */
import moment from 'moment'
	export default {
		props: ['value', 'fn', 'Adedotun'],
		computed: {
            formatter() {
                return formatter;
            }
        }
    }
    var formatter = {
    date: function(value, format) {
        if (value) {
            // return moment.utc(value).local().fromNow();
            return moment(String(value)).format(format || 'ddd, MMM Do, YYYY')
        }
    },

    year: function() {
            // return moment.utc(value).local().fromNow();
            return new Date().getFullYear('YYYY')
    },

    date_: function(value, format) {
        if (value) {
            // return moment.utc(value).local().fromNow();
            return moment(String(value)).format(format || 'Do MMM YYYY')
        }
    },

    humandate: function(value, format) {
        if (value) {
            return moment.utc(value).local().fromNow();
            // return moment(String(value)).format(format || 'ddd, MMM Do, YYYY')
        }
    },
    time: function(value, format) {
        if (value) {
            return moment(String(value)).format(format || 'h:mm A');
        }
    },

    time_comp: function(value, format) {
        if (value) {
            return moment(String(value)).format(format || 'HH:mm');
        }
    }
};
</script>
