@php
$title = $postdata->title;
echo '<div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-bold text-left">'$title'</h4>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                    <div class="col col-lg-2">
                            <p class="font-weight-bold text-left">Firma:</p>
                            <p class="font-weight-bold text-left">Position:</p>
                            <p class="font-weight-bold text-left">Navn:</p>
                            <p class="font-weight-bold text-left">Alder:</p>
                            <p class="font-weight-bold text-left">Erfaring:</p>
                            <p class="font-weight-bold text-left">Tlf:</p>
                        </div>
                        <div class="col col-lg-4">
                            <p class="text-left">Jacobsen VVS</p>
                            <p class="text-left">Kloakmester</p>
                            <p class="text-left">Jonas Larsen</p>
                            <p class="text-left">34 år</p>
                            <p class="text-left">14 år</p>
                            <p class="text-left">+45 88 88 88 88</p>
                        </div>
                <div class="col col-lg-6">
                    <div class="row">
                        <h1 class="card-title pricing-card-title">Yderligere information</h1>
                    </div>
                    <div class="row">
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-6">

                </div>
            </div>
        </div>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary mt-4">Læs mere</button>
    </div>
</div>
'
@endphp
