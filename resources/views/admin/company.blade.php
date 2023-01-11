@extends('admin.layouts.master')
@section('title')
    Company Setting
@endsection
@section('content')
    <div class="leftresultcideBox">
        <div id="leftspace" class="leftspacing settigBox mx-1">
            <div class="row Settingrow m-0 p-0">
                <div class="col-lg-6 col-md-6 col-sm-6 px-1 mb-sm-0 mb-2">
                    <div class="roundedBox round-box">

                        <div class="d-flex justify-content-center flex-column align-items-center bg-white">
                            <div class="comapnyprofile">
                                @if ($company)
                                    <img src="{{ asset('/images/company/' . $company->logo) }}" alt=""
                                        class="rounded-circle" style="width: 70px;height:70px;">
                            </div>
                            <p class="text-bold my-2">{{ $company->name }}</p>
                        @else
                            <div class="comapnyprofile"></div>
                            <p class="text-bold my-2">RDX</p>
                            @endif

                        </div>

                        <div class="companyDetails">
                            <div class="compamydetailsbox">
                                <p>
                                    <ion-icon name="location-outline"></ion-icon> Address

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->address ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <ion-icon name="grid-outline"></ion-icon> Postcode

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->postcode ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <ion-icon name="call-outline"></ion-icon>Contact

                                </p>
                                <p><span style="font-weight:bold;">{{ $company->contact ?? '' }}</span></p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <ion-icon name="document-outline"></ion-icon>Fax

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->fax ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <ion-icon name="at-outline"></ion-icon>Email

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->email ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <ion-icon name="globe-outline"></ion-icon> Website

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->website ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <ion-icon name="create-outline"></ion-icon> Account Tittle

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->account_title ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <img src="{{ asset('images/hashtag-symbol.png') }}" alt="" /> Account
                                    Number

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->account_number ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <img src="{{ asset('images/hashtag-symbol.png') }}" alt="" /> Sort Code

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->sort_code ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <img src="{{ asset('images/hashtag-symbol.png') }}" alt="" />
                                    Registration Number

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->company_registration ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <img src="{{ asset('images/hashtag-symbol.png') }}" alt="" />VAT Number
                                    <span style="font-weight:bold;">{{ $company->company_vat_register ?? '' }}</span>
                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->company_vat_register ?? '' }}</span>
                                </p>
                            </div>
                            <div class="compamydetailsbox">
                                <p><img src="{{ asset('images/hashtag-symbol.png') }}" alt="" />VAT %</p>
                                <p>0</p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <img src="{{ asset('images/hashtag-symbol.png') }}" alt="" />Display
                                    bank details on invoice
                                </p>
                                <p> <span style="font-weight:bold;">{{ $company->bank_detail ?? '' }}</span></p>
                            </div>
                            <div class="compamydetailsbox">
                                <p>
                                    <img src="{{ asset('images/hashtag-symbol.png') }}" alt="" />PAYE
                                    Reference

                                </p>
                                <p>
                                    <span style="font-weight:bold;">{{ $company->paye_reference ?? '' }}</span>
                                </p>
                            </div>

                            <div class="compamydetailsbox">
                                <p>
                                    <img src="{{ asset('images/hashtag-symbol.png') }}" alt="" />Start Of
                                    Holiday's Year
                                </p>
                                <p> <span style="font-weight:bold;">{{ $company->start_of_holiday ?? '' }}</span></p>
                            </div>

                            <div class="compamydetailsbox">
                                <p>
                                    <img src="{{ asset('images/hashtag-symbol.png') }}" alt="" />Start Of
                                    Notify SIA Expiry On Dashboard before
                                </p>
                                <p> <span style="font-weight:bold;">{{ $company->expiry_on ?? '' }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 px-1">
                    <div class="bg-white p-3 round-box roundedBox">
                        <form action="{{ url('/admin/company_setting') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Company logo</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="file" class="form-control w-100" name="logo" />
                                    @error('file')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Name</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="name" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder="Name" />
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Address</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="address" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" Company Address" />
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">City</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="city" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" City" />
                                    @error('city')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Postcode</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="postcode" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" Post code" />
                                    @error('postcode')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Contact</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" name="contact" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" Contact Number" />
                                    @error('contact')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Fax</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="fax" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" Fax Number" />
                                    @error('fax')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Email</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="email" name="email" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" example@gmail.com" />
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Website</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="website" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" www.domain.com" />
                                    @error('website')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Account Title</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="account_title" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" Account Title" />
                                    @error('account_title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Account Number</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="account_number" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" Account Number" />
                                    @error('account_number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold pb-1 pb-lg-0">Sort Code</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="sort_code" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" Sort Code" />
                                    @error('sort_code')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold">Company Registration</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="company_registration" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" Company Registration" />
                                    @error('company_registration')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-4">
                                <div class="col-lg-4">
                                    <p class="text-bold">Company VAT Registratered?</p>
                                </div>
                                <div class="col-lg-8 companyregister">
                                    <div>
                                        <label for="yes" class="mr-1">Yes</label>
                                        <input id="yes" name="company_vat_register" value="yes"
                                            type="checkbox" />
                                        @error('company_vat_register')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="No" class="mx-1">No</label>
                                        <input id="No" name="company_vat_register" value="no"
                                            type="checkbox" />
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold">print bank details on Invoice?</p>
                                </div>
                                <div class="col-lg-8 companyregister">
                                    <div>
                                        <label for="yes" class="mr-1">Yes</label>
                                        <input id="yes" name="bank_detail" value="yes" type="checkbox" />
                                        @error('bank_detail')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="No" class="mx-1">No</label>
                                        <input id="No" name="bank_detail" value="no" type="checkbox" />
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold">PAYE Reference</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="paye_reference" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" PAYE Reference" />
                                    @error('paye_reference')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold">Start of Holiday's Year</p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="start_of_holiday" class="form-control w-100"
                                        aria-describedby="emailHelp" placeholder=" January" />
                                    @error('start_of_holiday')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-4">
                                    <p class="text-bold">
                                        Notify SIA Expiry on Dashboard before
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="expiry_on" class="form-control w-100"
                                        aria-describedby="emailHelp"
                                        placeholder=" Notify SIA Expiry on Dashboard before" />
                                    @error('expiry_on')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex align-items-center mb-2">
                                <div class="col-lg-8">

                                </div>
                                <div class="col-lg-4">
                                    <button type="submit" class="addbtn">Save Changes</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
