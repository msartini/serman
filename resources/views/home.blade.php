@extends('layouts.app')
<script src="https://unpkg.com/vue/dist/vue.js"></script>

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="panel-heading">CONTENT YELD</div>
            </div>
        </div>
    </div>

    <div id="templateform">
        <div>
            <template v-if="loginType === 'username'">
              <label>Username</label>
              <input placeholder="Enter your username">
              <input type="text" name="name">
               <select name="opcoes" id="">
                  <option value="1">LALA 1</option>
                  <option value="2">LALA 2</option>
              </select>
            </template>
            <template v-else>
              <label>Email</label>
              <input placeholder="Enter your email address">
              <input type="text" name="name">
              <select name="opcoes" id="">
                  <option value="1">OPCAO 1</option>
                  <option value="2" >OPCAO 2</option>
              </select>
            </template>
        </div>
        <button @click="toggleLoginType">Toggle login type</button>
    </div>

    <script>


    new Vue({
      el: '#templateform',
      data: {
        loginType: 'username'
      },
      methods: {
        toggleLoginType: function () {
          console.log(this.loginType);

          return this.loginType = this.loginType === 'username' ? 'email' : 'username'
        }
      }
    })
</script>

</div>


@endsection


