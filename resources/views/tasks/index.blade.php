  @foreach($tasks as $task)
    @include ('tasks.item', compact('task'))
  @endforeach

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('iCheck/icheck.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>