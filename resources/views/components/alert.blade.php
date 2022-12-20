<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
              
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $error }} 
                {{-- <a href="#" class="alert-link">Alert Link</a>.  --}}
            </div>
             
        @endforeach
    @endif

    @if(Session::has('success'))
        
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('success')}} 
            {{-- <a href="#" class="alert-link">Alert Link</a>.  --}}
        </div>
    @endif

    @if(Session::has('fail'))
        
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('fail')}} 
        {{-- <a href="#" class="alert-link">Alert Link</a>.  --}}
    </div>
@endif
</div>