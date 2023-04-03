<x-layout>
        <h3>{{ $sponsor->company_name }}</h3>
        <img src="{{ $sponsor->img }}" alt="Photo"/>
        <section class="sponsor-address">
            <h3>Address</h3>    
            <h4>{{ $sponsor->primary_address}}</h4>
            <h4>{{ $sponsor->city }}</h4>
            <h4>{{ $sponsor->postal }}</h4>
        </section>
        <section class="sponsor-contact">
            <h3>Phone: {{ $sponsor->phone }}</h3>
            <h3>Email: {{ $sponsor->email }}</h3>
        </section>
        <h3>About {{ $sponsor->company_name }}</h3>
        <h4> {!! $sponsor->bio !!} </h4>
        <section>
            <h3>Project Images</h3>
            <div>
                <img src="{{ $sponsor->project_img }}" alt="Photo" >
            </div>
        </section>
        
</x-layout>