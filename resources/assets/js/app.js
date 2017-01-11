
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
require('jquery');
require('./bootstrap');
require('materialize-css');

//require('./main');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

//Vue.component('task', require('./components/Article.vue'));

// Vue.component('task', {
//   template: '<li><slot></slot></li>'
// });


Vue.component('task-list', {
  template: `
    <div>
      <div class="title">Tarefas</h1>
      <div v-for="task in tasks">
          <article class="message">
            <div class="message-header">
              <p>{{task.title}}</p>
            </div>
            <div class="message-body">
              {{task.task}}
            </div>
          </article>
      </div>
    </div>
    `,
  data() {
    return {
      tasks: [
        { title: 'Store', task: 'Go to the store', complete: true},
        { title: 'Webmail', task: 'Go to the email', complete: true},
        { title: 'Farm', task: 'Go to the farmooooo', complete: true},
        { title: 'Work', task: 'Go to the work', complete: true}
      ]
    };
  }
});

Vue.component('message', {
  props: ['title', 'body'],
  template: `
    <div>
     <article class="message">
        <div class="message-header">
          <p>{{ title }}</p>
        </div>
        <div class="message-body">
          {{ body }}
        </div>
      </article>
    </div>
  `
});

new Vue({
  el: '#app'
});






