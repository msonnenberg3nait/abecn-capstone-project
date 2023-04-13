<x-layout>
    <main>
        <section class="member-directory-banner" style="height:17rem;">
            <div class="member-directory-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full;"> 
                <div class="banner-text inner-container">
                    <h2>Member Directory</h2>
                </div>
            </div>
        </section>
        <section class="members inner-container">
        @foreach ($users as $user)
            <div class="member-card mx-auto bg-slate-100 mb-4 text-center rounded-lg drop-shadow-lg">           
                <div class="member-img">
                    <img class="w-40 h-16 mb-3 mx-auto rounded-full shadow-lg" src="{{$user->profile_img }}" alt="Profile image"/>
                </div>
                <div class="member-info">
                    <h4 class="mb-1 text-3xl">{{ $user->first_name}} {{ $user->last_name}}</h4>
                    <h5 class="uppercase">{{ $user->specialty }}</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
            </div>
            @endforeach
    </section>
    </main>
</x-layout>