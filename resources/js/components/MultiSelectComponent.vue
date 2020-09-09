<template>
<div>
  <!--label class="typo__label">Simple select / dropdown</label-->
  <multiselect  v-model="value" :multiple="true" :close-on-select="false" 
  :clear-on-select="false" :preserve-search="true" placeholder="Pick some" 
  :preselect-first="true"
  name="userid"
  :options="options.map(option => option.value)" 
  :custom-label="opt => options.find(x => x.value == opt).label"
  >
    <template slot="selection" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template>
  </multiselect>
  <pre class="language-json"><code>{{ value  }}</code></pre>
  <input type="hidden" name="users" v-model="value">
</div>
</template>

<script>
    import Multiselect from 'vue-multiselect'

    // register globally
    Vue.component('multiselect', Multiselect)

    export default {
        // OR register locally
        components: { Multiselect },
        props: {
          options: {
            type: Array,
              default: function() {
                return [];
              }
            }
        },
        data () {
            return {
                value: []
            }
        }
    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>