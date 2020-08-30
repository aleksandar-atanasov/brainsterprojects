<div class="container main-heading">

<h2 class="text-center">Приклучи се на 1350 ентузијасти и учи {{$category->name ?? 'дигитални вештини.' }}<br>
        Бесплатно.</h2>
    <div class="input">
    <form action="{{route('home')}}" method="POST">
        @csrf
            <input type="email" name="email" placeholder="Email address">
            <input type="hidden" name="category" value="{{$category->id ?? ''}}">
            <button class="button">Пријави се</button>
        </form>
    </div>
    <p class="text-small">Можеш да се исклучиш од листата на маилови во секое време!</p>
</div>