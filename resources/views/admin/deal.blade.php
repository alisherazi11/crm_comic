{{-- @extends('admin.layouts.user')
@section('title')
    My Project
@endsection
@section('content')
    <sidebar-element></sidebar-element> --}}
<html>
<head>
    <x-dealhead/>
</head>
<body>
    <x-adminsidebar />
    <div class="dealContainer">
        <div class="scrolldealBox">
            <div class="dealCardBox">
                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>

                        </button>
                        <ul class="p-0 m-0" style="list-style: none;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="dealcard">
                    <div class="dealcarheader borderyellow">

                        <div>
                            <h3>Today's Deals</h3>
                            <p>{{ $todays->count() }} deals <span class="green"> $0</span></p>
                        </div>
                        <div class="bluecircle" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>

                    <div class="dealcardbody">
                        <p class="nodela">
                            No deals,<a href="/" data-toggle="modal" data-target="#exampleModal" class="blue">add
                                deal</a>
                        </p>
                    </div>
                </div>

                <div class="dealcard">
                    <div class="dealcarheader borderblue">
                        <div>
                            <h3>New Deals</h3>
                            <p>{{ $news->count() }} deals <span class="green"> $0</span></p>
                        </div>
                        <div class="bluecircle" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>

                    <div class="dealcardbody">
                        <p class="nodela">
                            No deals,<a data-toggle="modal" data-target="#exampleModal" href="/" class="blue">add
                                deal</a>
                        </p>
                    </div>
                </div>
                <div class="dealcard">
                    <div class="dealcarheader">
                        <div>
                            <h3>Assigned Deals</h3>
                            <p>0 deals <span class="green"> $0</span></p>
                        </div>
                        <div class="bluecircle" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>

                    <div class="dealcardbody">
                        <p class="nodela">
                            No deals,<a href="/" data-toggle="modal" data-target="#exampleModal" class="blue">add
                                deal</a>
                        </p>
                    </div>
                </div>

                <div class="dealcard">
                    <div class="dealcarheader borderblue">
                        <div>
                            <h3>Hot Deals</h3>
                            <p>0 deals <span class="green"> $0</span></p>
                        </div>
                        <div class="bluecircle" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>

                    <div class="dealcardbody">
                        <p class="nodela">
                            No deals,<a href="#" data-toggle="modal" data-target="#exampleModal" class="blue">add
                                deal</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form action="{{ url('/add-deal') }}" method="post">
                    @csrf
                    <div class="modal-body p-2">


                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="popinput">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                                aria-describedby="emailHelp" />
                            <!-- <i class="fa-solid fa-circle-check"></i> -->
                            <ion-icon name="checkmark-outline" class="green"> </ion-icon>
                            <!-- <i class="fa-solid fa-circle-xmark"></i> -->
                            <ion-icon name="close-outline" class="red"></ion-icon>
                        </div>
                        <div class="buyerBox">
                            <a href="#">Buyer </a>
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                            <div class="d-flex align-items-center">
                                <div class="redDot mr-2"></div>
                                <a href="#">Not Qualified</a>
                            </div>
                        </div>

                        <div class="gridRow">
                            <div class="">
                                <div class="addprice">
                                    <h6 class="h6">Price</h6>
                                    <a href="" id="addPrice" class="anchor">Add price</a>
                                    <div class="add-prize-input" id="inputbox1">
                                        <input type="text" class="form-control" placeholder="Add price"
                                            name="price" id="prize" />
                                        <ion-icon name="checkmark-outline" id="tick" class="green">
                                        </ion-icon>
                                        <ion-icon name="close-outline" id="croos" class="red"></ion-icon>
                                    </div>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="addprice">
                                    <h6 class="h6" id="closedat">CLOSE DATE</h6>
                                    <a href="" class="anchor" id="close">Add close date</a>
                                    <div class="add-prize-input" id="inputbox2">
                                        <input type="date" class="form-control" placeholder="Add price"
                                            name="close_date" id="prize" />
                                        <ion-icon name="checkmark-outline" id="tick2" class="green">
                                        </ion-icon>
                                        <ion-icon name="close-outline" id="croos2" class="red"></ion-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gridRow">
                            <div class="">
                                <div class="addprice">
                                    <h6 class="h6">COMMISION</h6>
                                    <a href="" id="add_commision" class="anchor">Add Commision</a>
                                    <div class="add-prize-input" id="inputbox3">
                                        <input type="text" class="form-control" placeholder="Add commision"
                                            name="commision" id="prize" />
                                        <ion-icon name="checkmark-outline" id="tick3" class="green">
                                        </ion-icon>
                                        <ion-icon name="close-outline" id="croos3" class="red"></ion-icon>
                                    </div>
                                </div>
                            </div>

                            <div class="addAgent">
                                <div class="addprice">
                                    <h6 class="h6">SPLITS</h6>

                                    <a href="" id="agent_split" class="anchor">Add agent split</a>
                                    <div class="add-prize-input" id="inputbox5">
                                        <input type="text" class="form-control" placeholder="Add agent split"
                                            name="agent_split" id="prize" />
                                        <ion-icon name="checkmark-outline" id="tick5" class="green">
                                        </ion-icon>
                                        <ion-icon name="close-outline" id="croos5" class="red"></ion-icon>
                                    </div>
                                    <a href="" id="team_split" class="anchor">Add team split</a>
                                    <div class="add-prize-input" id="inputbox6">
                                        <input type="text" class="form-control" placeholder="Add team split"
                                            name="team_split" id="prize" />
                                        <ion-icon name="checkmark-outline" id="tick6" class="green">
                                        </ion-icon>
                                        <ion-icon name="close-outline" id="croos6" class="red"></ion-icon>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="addpeople">
                            <div class="people">
                                <h6 class="h6">PEOPLE</h6>
                                <select class="selLead w-100" name="people" id="">
                                    <option value="">people</option>
                                    @foreach ($users as $item)
                                        <option value="{{ $item->first_name }}">
                                            {{ $item->first_name }}{{ $item->last_name }}
                                        </option>
                                    @endforeach
                                </select>
                                {{-- <div class="grayplus">
                                <i class="fa-solid fa-plus"></i>
                            </div> --}}
                            </div>
                            <div class="people">
                                <h6 class="h6">TEAM</h6>
                                <select class="selLead w-100" name="team" id="">
                                    <option value="">agent</option>
                                    @foreach ($agents as $item)
                                        <option value="{{ $item->type }}">{{ $item->type }}</option>
                                    @endforeach
                                </select>
                                {{-- <div class="circwIcon">
                                <div class="grayplus pink">IL</div>
                                <div class="grayplus">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </div> --}}
                            </div>
                        </div>
                        <div class="adddecsription">
                            <div class="">
                                <div class="addprice">
                                    <h6 class="h6">DECSRIPTION</h6>
                                    <a href="" id="add_description" class="anchor">Add Description</a>
                                    <div class="add-prize-input" id="inputbox4">
                                        <input type="text" class="form-control" placeholder="Add Description"
                                            name="description" id="prize" />
                                        <ion-icon name="checkmark-outline" id="tick4" class="green">
                                        </ion-icon>
                                        <ion-icon name="close-outline" id="croos4" class="red"></ion-icon>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer modalfooterbg">
                        <button type="button" class="cancel" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="addbtn">Create deal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>

    <script>
        const addPrice = document.getElementById("addPrice");
        const closedat = document.getElementById("close");
        const commision = document.getElementById("add_commision");
        const description = document.getElementById("add_description");
        const agent = document.getElementById("agent_split");
        const team = document.getElementById("team_split");
        const inputbox1 = document.getElementById("inputbox1");
        const inputbox2 = document.getElementById("inputbox2");
        const inputbox3 = document.getElementById("inputbox3");
        const inputbox4 = document.getElementById("inputbox4");
        const inputbox5 = document.getElementById("inputbox5");
        const inputbox6 = document.getElementById("inputbox6");
        const croos = document.getElementById("croos");
        const croos2 = document.getElementById("croos2");
        const croos3 = document.getElementById("croos3");
        const croos4 = document.getElementById("croos4");
        const croos5 = document.getElementById("croos5");
        const croos6 = document.getElementById("croos6");
        const tick = document.getElementById("tick");
        const tick2 = document.getElementById("tick2");
        const tick3 = document.getElementById("tick3");
        const tick4 = document.getElementById("tick4");
        const tick5 = document.getElementById("tick5");
        const tick6 = document.getElementById("tick6");
        const prize = document.getElementById("prize");
        console.log(prize.value);

        addPrice.addEventListener("click", (e) => {
            e.preventDefault();
            inputbox1.style.display = "flex";
            addPrice.style.display = "none";
        });
        closedat.addEventListener("click", (e) => {
            e.preventDefault();
            inputbox2.style.display = "flex";
            closedat.style.display = "none";
        });
        commision.addEventListener("click", (e) => {
            e.preventDefault();
            inputbox3.style.display = "flex";
            commision.style.display = "none";
        });
        description.addEventListener("click", (e) => {
            e.preventDefault();
            inputbox4.style.display = "flex";
            description.style.display = "none";
        });
        agent.addEventListener("click", (e) => {
            e.preventDefault();
            inputbox5.style.display = "flex";
            agent.style.display = "none";
        });
        team.addEventListener("click", (e) => {
            e.preventDefault();
            inputbox6.style.display = "flex";
            team.style.display = "none";
        });
        croos.addEventListener("click", () => {
            inputbox1.style.display = "none";
            addPrice.style.display = "block";
        });
        croos2.addEventListener("click", () => {
            inputbox2.style.display = "none";
            closedat.style.display = "block";
        });
        croos3.addEventListener("click", () => {
            inputbox3.style.display = "none";
            commision.style.display = "block";
        });
        croos4.addEventListener("click", () => {
            inputbox4.style.display = "none";
            description.style.display = "block";
        });
        croos5.addEventListener("click", () => {
            inputbox5.style.display = "none";
            agent.style.display = "block";
        });
        croos6.addEventListener("click", () => {
            inputbox6.style.display = "none";
            team.style.display = "block";
        });
        tick2.addEventListener("click", () => {
            inputbox2.style.display = "none";
            closedat.style.display = "block";

            closedat.innerHTML = prize.value;
        });
    </script>
    <x-adminfooter />
</body>
</html>
    <!-- ///header -->

    <!-- ///DEAL CARD -->
{{-- @endsection --}}
