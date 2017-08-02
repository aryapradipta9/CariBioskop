<p> Pilih bioskop </p>
<select ng-model="selectedBioskop" ng-change="getBasedOnName()">
    <option ng-repeat="x in bioskop" value="[[x.nama_bioskop]]">
        [[x.nama_bioskop]]
    </option>

</select>
<p> Atau pilih film</p>
<select ng-model="selectedMovie" ng-change="getBasedOnJudul()">
    <option ng-repeat="x in movie" value="[[x.judul]]">
        [[x.judul]]
    </option>

</select>
<!--<input type="text" ngModel="searchBox">
<!-- THE COMMENTS =============================================== -->
<!-- hide these comments if the loading variable is true -->
<div class="studiox" ng-hide="loading" ng-repeat="studioy in studio">
    <h3>Studio [[studioy.nomor_studio]] [[ studioy.nama ]]</h3> film [[studioy.judul]] jam [[studioy.waktu]] dengan sisa kursi <h3> [[studioy.sisa_kapasitas]] </h3>

</div>