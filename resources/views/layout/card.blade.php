<div class="card p-2 mx-3 mt-2 shadow-lg" style="width: 250px">
    <img class="card-img-top mb-2" src="{{ $beasiswa->image }}" alt="" width="120px" height="120px">
    <div class="card-top">
        <h5 class="card-title">{{ $beasiswa->name }}</h5>
    </div>
    <p class="card-text">{{ $beasiswa->category }}</p>
    <div class="card-text d-flex align-items-center mb-3">
        <ion-icon name="pin-outline" class="me-1"></ion-icon> 
        <div class="">{{ $beasiswa->city }}</div>
    </div>
    <div class="card-text d-flex align-items-center mb-3">
        <div class="card-text d-flex align-items-center mb-3">
            <ion-icon name="people-circle-outline" class="me-1"></ion-icon>
            <div class="">{{ $beasiswa->type }}</div>
        </div>
    </div>
    <a href="{{ route('beasiswa-details', ['id'=> $beasiswa->id]) }}" class="btn btn-warning">Details</a>
</div>