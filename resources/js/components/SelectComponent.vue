<template>
<div>
  <!--label class="typo__label">Simple select / dropdown</label-->
  <multiselect v-model="value" :multiple="false" 
  :close-on-select="false" :clear-on-select="false" :preserve-search="true" 
  placeholder="Pick some" label="label" :preselect-first="true"
  name="todoid"
  :options="options.map(option => option.value)" 
  :custom-label="opt => options.find(x => x.value == opt).label"
  >
    <template slot="selection" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template>
  </multiselect>
  <pre class="language-json"><code>{{ value  }}</code></pre>
  <input type="hidden" name="todo" v-model="value">  
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