<div>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
                <!-- Side Bar -->
              <div class="flex-grow-0 flex-shrink-0 mb-5 overflow-auto bg-white d-none d-lg-block col-md-2 app-sidebar bg-view position-relative pe-1 ps-3" style="z-index: 500;">
                <form action="./" method="get" autocomplete="off" novalidate class="sticky-top">

                  <header class="pt-3 form-label font-weight-bold text-uppercase"> <b><i class="bi bi-list"></i> {{ $this->headerText }}</b></header>
                  <ul class="mb-4 ml-2">
                    @foreach($this->data() as $row)
                    <li class="text-decoration-none panel-category selected' py-1 pe-0 ps-0 cursor-pointer">
                      {{ $row->name }}
                    </li>
                    @endforeach
                  </ul>

                </form>
              </div>

            <!-- Map -->
            <x-maps-leaflet :centerPoint="['lat' => 52.16, 'long' => 5]"></x-maps-leaflet>
            <iframe class="p-0 col-12 col-md-12 col-lg-10" height="700" src="https://www.openstreetmap.org/export/embed.html?bbox=26.015625%2C-5.8127569137510084%2C50.537109375%2C7.863381805309173&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/>
        </div>
    </div>
</div>
