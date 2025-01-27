<x-layout>
  <x-slot:heading>
  Jobs Listings
</x-slot:heading>

<div class="btn text-custom-green">
  Primary Button
</div>

<div class="rotate-30">
  Rotated Content
</div>

<div class="btn-secondary text-customGray">
  Secondary Button
</div>

<div class="space-y-4 bg-customGreen">
  @foreach ($jobs as $job)

      <a href="/jobs/{{$job['id']}}" class="block px-4  py-6 border border-gray-200 rounded-lg ">
       <div class="font-bold text-blue-500 ">{{ $job->employer->name}}</div>
        <div>
          <strong class="text-laracasts">{{ $job['title'] }} :</strong> pays {{ str_replace(' ', '',$job['salary']) }} per year 
        </div>
      </a>
  @endforeach 

  <div>
    {{ $jobs->links()}}
  </div>
</div>
</x-layout>