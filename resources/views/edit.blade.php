<x-layout>
    <h1>Todo list </h1>
    <form action="/todo" method="POST">
        @csrf
        <div>
            <label for="">Task</label>
            <input type="text" name="task" id="task" placeholder="Do the dishes">
          <div style="color:red">
              @error('task')
                <p>{{$message}}</p>
              @enderror
          </div>
        </div>
        <div style="margin-top: 16px">
            <label for="">Time</label>
            <input  type="text" id="time" name="time" placeholder="noon">
            <div style="color:red">
              @error('time')
                <p>{{$message}}</p>
              @enderror
          </div>
        </div>
        <div style="margin-top: 10px">
            <button type="submit">submit</button>
        </div>
    </form>
    <div class="margin:30px ">
        @foreach ($todo as $tod)
            <li style="padding: 10px">{{$tod -> Task}}  <span style="margin-right: 10px">{{$tod -> Time}}</span><span><a href="/todo/{id}/edit" style="color: red; ">delete</a></span></li>
        @endforeach
    </div>
</x-layout>
