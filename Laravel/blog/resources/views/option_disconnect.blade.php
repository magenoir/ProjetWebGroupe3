<button class="button" onclick="document.getElementById('logout-form').submit();">{{Auth::user()->name}} </button>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
 </form>
