<form action="{{route('locale', $lang)}}" method="post">
    @csrf
        <button type="submit" class="footer-link" style="background-color: transparent; border:none;">
            <img class="w-50 h-50" src="/media/{{$nation}}.png" alt="">
        </button>
    </form>