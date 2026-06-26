<x-layout>
     <ul>
    @foreach($students as $student)


                <li class="p-3 border-2 border-cyan-900 rounded-2xl my-2">
                {{-- <h3 class="text-2xl text-cyan-400"> {{$job ->employer ->name}} </h3> --}}
                 <strong class="text-cyan-900">{{$student['first_name']}}</strong> :{{$student['Reg_Number']}}.
             </li>


    @endforeach
</ul>
    <h4>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque dolores debitis, ea aperiam quis sequi soluta aliquam et repellat quos aspernatur quasi necessitatibus? Iste esse omnis fuga suscipit ipsam voluptates.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque dolores debitis, ea aperiam quis sequi soluta aliquam et repellat quos aspernatur quasi necessitatibus? Iste esse omnis fuga suscipit ipsam voluptates.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque dolores debitis, ea aperiam quis sequi soluta aliquam et repellat quos aspernatur quasi necessitatibus? Iste esse omnis fuga suscipit ipsam voluptates.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque dolores debitis, ea aperiam quis sequi soluta aliquam et repellat quos aspernatur quasi necessitatibus? Iste esse omnis fuga suscipit ipsam voluptates.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque dolores debitis, ea aperiam quis sequi soluta aliquam et repellat quos aspernatur quasi necessitatibus? Iste esse omnis fuga suscipit ipsam voluptates.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque dolores debitis, ea aperiam quis sequi soluta aliquam et repellat quos aspernatur quasi necessitatibus? Iste esse omnis fuga suscipit ipsam voluptates.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque dolores debitis, ea aperiam quis sequi soluta aliquam et repellat quos aspernatur quasi necessitatibus? Iste esse omnis fuga suscipit ipsam voluptates.
    </h4>
</x-layout>
