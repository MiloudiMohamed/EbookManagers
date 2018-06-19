@extends('layouts.app')
@section('content')

    <div class="container">
    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"/>
        </div>
        <div class="form-group">
            <label for="postaladdress1">Postal Address 1</label>
            <input type="text" name="postaladdress1" class="form-control" id="exampleFormControlInput1"/>
        </div>
        <div class="form-group">
            <label for="postaladdress2">Postal Address 2</label>
            <input type="text" name="postaladdress2" class="form-control" id="exampleFormControlInput1"/>
        </div>

        <div class="form-group">
            <label for="postaladdress3">Postal Address 3</label>
            <input type="text" name="postaladdress3" class="form-control" id="exampleFormControlInput1"/>
        </div>
        <div class="form-group">
            <label for="postalcountry">Postal Country</label>
            <input type="text" name="postalcountry" class="form-control" id="exampleFormControlInput1"/>
        </div>

        <div class="form-group">
            <label for="address1">Address 1</label>
            <input type="text" name="address1" class="form-control" id="exampleFormControlInput1"/>
        </div>


        <div class="form-group">
            <label for="address2">Address 2</label>
            <input type="text" name="address2" class="form-control" id="exampleFormControlInput1"/>
        </div>


        <div class="form-group">
            <label for="address3">Address 3</label>
            <input type="text" name="address3" class="form-control" id="exampleFormControlInput1"/>
        </div>

        <div class="form-group">
            <label for="postcode">Postcode</label>
            <input type="text" name="postcode" class="form-control" id="exampleFormControlInput1"/>
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" class="form-control" id="exampleFormControlInput1"/>
        </div>

        <div class="form-group">
            <label for="telephone1">Telephone 1 </label>
            <input type="text" name="telephone1" class="form-control" id="exampleFormControlInput1"/>
        </div>


        <div class="form-group">
            <label for="telephone2">Telephone 2 </label>
            <input type="text" name="telephone2" class="form-control" id="exampleFormControlInput1"/>
        </div>


        <div class="form-group">
            <label for="email">Email Address </label>
            <input type="text" name="email" class="form-control" id="exampleFormControlInput1"/>
        </div>

        <div class="form-group">
            <label for="primarycontact">Primary Contact</label>
            <input type="text" name="primarycontact" class="form-control" id="exampleFormControlInput1"/>
        </div>


        <div class="form-group">
            <label for="accountscontact">Accounts Contact</label>
            <input type="text" name="accountscontact" class="form-control" id="exampleFormControlInput1"/>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control" id="exampleFormControlInput1"/>
        </div>

             <div class="form-group">
            <label for="from">From</label>
            <input type="text" name="from" class="form-control" id="exampleFormControlInput1"/>
        </div>

        <div class="form-group">
            <label for="template">Template</label>
             <textarea class="form-control" name="template"></textarea>
        </div>

        <div class="form-group">
            <label for="acsid">ACSID</label>
            <input type="text" name="acsid" class="form-control" id="exampleFormControlInput1"/>
        </div>

        <div class="form-group">
            <label for="shared_secret">Shared Secret</label>
            <input type="text" name="shared_secret" class="form-control" id="exampleFormControlInput1"/>
        </div>

    </form>
    </div>

@endsection