@extends('layouts.master')

@section('title','Produto')

@section('content')
<section class="container my-5 py-5">

    <div class="row">
        <div class="col">
            <img src="Images/rounded.jpg" alt="" class="img-responsive">
        </div>
        <div class="col">
            <h1>Aqui vem o titulo do livro</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur eum nihil natus harum, odio
                facere omnis soluta, aut sunt veritatis atque nesciunt in vel molestiae maxime alias repellat
                ducimus inventore!</p>
            <p class="preco">R$45,00</p>
            <button class="comprar btn btn-primary">Comprar</button>
        </div>
    </div>
    <div class="row">
        <div class="col mt-5">
            <a href="produtos.html" class="btn btn-default"> voltar para lista</a>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>