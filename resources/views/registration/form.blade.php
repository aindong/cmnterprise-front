
<div class="" style="background: url('/img/bg.png')">
    <div class="row">
        <div class="col s8 offset-s2">

            <div class="card">
                <div class="card-content">
                    <div class="img-banner" style="height: 200px;width: 100%;">
                        <img src="/img/events_banner_1.jpg" alt="" style="height: 100%;width: 100%;">
                    </div>
                    <span class="card-title grey-text text-darken-4">
                        {{--<span style="font-size: 35px;"> SHIMANO GRAN FONDO </span>Monasterio de Tarlac 2015--}}
                    </span>
                    <div style="margin-bottom: 20px;"></div>
                    <form action="" id="registrationForm" method="POST">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="col s4">
                                        <p>
                                            <input name="category" type="radio" id="grand_fondo" value="gran_fondo" checked/>
                                            <label for="grand_fondo">Gran Fondo</label>
                                        </p>
                                    </div>
                                    <div class="col s4">
                                        <p>
                                            <input name="category" type="radio" id="media_fondo" value="media_fondo"/>
                                            <label for="media_fondo">Media Fondo</label>
                                        </p>
                                    </div>
                                    <div class="col s4">
                                        <p>
                                            <input name="is_elite" type="checkbox" id="elite" value="1"/>
                                            <label for="elite">Elite</label>
                                        </p>
                                    </div>

                                    <div class="input-field col s4">
                                        <input id="first_name" name="firstname" type="text" class="validation">
                                        <label for="first_name" class="warning">First Name</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input id="middle_name" name="middlename" type="text" class="validation">
                                        <label for="middle_name" class="warning">Middle Name</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input id="last_name" name="lastname" type="text" class="validation">
                                        <label for="last_name" class="warning">Last Name</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="mobilenumber" name="mobilenumber" type="text" class="validation">
                                        <label for="mobilenumber" class="warning">Mobile Number</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <select name="nationality">
                                            <option value="" disabled selected>Choose your Nationality</option>
                                            <option value="filipino">Filipino</option>
                                            <option value="american">American</option>
                                            <option value="korean">Korean</option>
                                            <option value="others">Others</option>
                                        </select>
                                        <label class="warning">Nationality</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <select name="gender" id="gender">
                                            <option value="" disabled selected>Choose your Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        <label for="gender" class="warning">Gender</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input type="date" name="birthdate" id="birthdate" class="validation datepicker">
                                        <label for="birthdate" class="warning">Birthdate</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="email" name="email" type="email" class="validation">
                                        <label for="email" class="warning">Email</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="affiliation" name="affiliation" type="text">
                                        <label for="affiliation" class="warning">Affiliation</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <textarea id="address" name="address" class="validation materialize-textarea" length="120"></textarea>
                                        <label for="address" class="warning">Address</label>
                                    </div>

                                    <div class="col s12">
                                        <span class="card-title grey-text text-darken-4">
                                            Categories
                                        </span>
                                    </div>

                                    <div class="input-field col s12">
                                        <label class="warning" for="category">Age Category</label>
                                        <input id="category" name="category" type="text" placeholder="Age Category" class="validation" disabled>
                                    </div>

                                    <div class="input-field col s6">
                                        <p class="warning">Bike Category</p>
                                        <select name="bike_type" class="browser-default">
                                            <option value="" disabled selected>Choose your Bike</option>
                                            <option value="mountain_bike">Mountain Bike</option>
                                            <option value="road_racer">Road Racer</option>
                                            <option value="folding_bike">Folding Bikes</option>
                                            <option value="bmx">BMX</option>
                                            <option value="commuter">Commuter</option>
                                        </select>
                                    </div>

                                    <div class="input-field col s6">
                                        <p class="warning">T-Shirt Size</p>
                                        <select name="tshirt_size" class="browser-default">
                                            <option value="" disabled selected>Choose your T-Shirt</option>
                                            <option value="xxs">XXS</option>
                                            <option value="xs">XS</option>
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                            <option value="xxl">XXL</option>
                                        </select>
                                    </div>

                                    <div class="col s12 right-align" style="margin-top:20px;">
                                        <button type="submit" class="waves-effect waves-light btn-large">
                                            <i class="material-icons right">send</i>Submit
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

