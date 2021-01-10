<div id="black-friday-text-bg">
    <a href="#black-friday-section" class="my-auto" id="arrow-link">
        <img id="light-arrow" src="images/chevron-double-down-light.svg" class="mx-auto d-block">
    </a>
</div>
<div id="dark-bg">
<section id="black-friday-section">
    <div class="black-friday">
        <div class="container">
            <div class="container-fluid row">
                @foreach($product as $key => $data)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="images/Objektiiv.png" alt="Add1" width="100%" height="auto">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$data->name}}</h5>
                            <p class="card-text float-left">{{$data->price}} €</p>
                            <button class="btn btn-danger d-inline-block float-right">Osta</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
