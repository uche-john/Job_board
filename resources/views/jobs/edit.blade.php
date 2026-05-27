<x-layout>
    <h1 class=" ml-5 text-2xl text-cyan-900">This is the Edit page  <span class="text-cyan-600">You are about to edit the job <i class="text-red-500">{{$job -> title}}</i></span></h1>

<form
class="border-2xl border-2 rounded-2xl m-6 p-5 bg-gray-100"
method="Post"
action="/jobs/{{$job-> id}}"
>
    @csrf
    @method('PATCH')

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
      <p class="mt-1 text-sm/6 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus facilis molestias, dolorem ipsum nihil, hic, maiores minus odit ipsam accusantium nesciunt. Quisquam obcaecati ullam eaque eveniet, mollitia reiciendis excepturi nostrum.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

              <input
              id="title"
              type="text"
              name="title"
              placeholder="Operations manager"
              class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
              value="{{$job -> title}}"
              required
              />
            </div>

            @error('title')
                <p style="color: red">{{$message}}</p>
            @enderror
          </div>

          <div class="sm:col-span-4 mt-4">
          <label for="pay"
          class="block text-sm/6 font-medium text-gray-900">Salary</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input
              id="pay"
              type="text"
              name="pay"
              placeholder="$50,000/per month"
              class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
              value="{{$job -> pay}}"
              required
              />
            </div>
             @error('pay')
                <p style="color: red">{{$message}}</p>
            @enderror
          </div>
          <hr class="mt-5">

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <div>
        <button form="delete-form">Delete</button>
    </div>
    <a href="/jobs/{{ $job -> id}}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>

    <button
    type="submit"
    class="
    rounded-md
    bg-indigo-600
    px-3
    py-2
    text-sm
    font-semibold
    text-white
    shadow-xs
    hover:bg-indigo-500
    focus-visible:outline-2
    focus-visible:outline-offset-2
    focus-visible:outline-indigo-600"
    >Update</button>
  </div>
</form>

<form method="POST" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
@csrf
@method('DELETE')

</form>


</x-layout>

