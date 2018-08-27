@extends('layouts.app')

@section('content')
<div class="container ">
      <div class="row" id="app">
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                  <li class="list-group-item active text-center">Chat Room <span class="badge  badge-pill badge-danger">@{{ numberOfUsers }}</span> </li>
                  <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                  <ul class="list-group" v-chat-scroll>
                    <chat
                    v-for="value,index in chat.message"
                    :key=value.index
                    :color= chat.color[index]
                    :user = chat.user[index]
                    :time = chat.time[index]
                    >
                          @{{ value }}
                  </chat>
                  </ul>
                    <input type="text" class="form-control" placeholder="Type your message here..." v-model='message' @keyup.enter='send'>
                    <br>
                    <a href='' class="btn btn-secondary " @click.prevent='deleteSession'>Delete Chats</a>
            </div>
      </div>
</div>


@endsection