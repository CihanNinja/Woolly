<div class="col-md-4">
    <div class="card">
        <div class="card-header">{{ Auth::user()->name }}</div>

        <div class="card-body">
            <div id="stats">
            <table>
                <tr>
                    <td>level:</td>
                    <td>{{$expinfo->experience_amount}}</td>
                </tr>
                <tr>
                    <td>Energy:</td>
                    <td>{{$resourceinfo->resources_energy}}</td>
                </tr>
                <tr>
                    <td>Money:</td>
                    <td>{{$resourceinfo->resources_money}}</td>
                </tr>
                <tr>
                    <td><br></td>
                    <td>

                </tr>
            </table>
            </div>
            <div class="list-group" id="sidebarList" role="tablist">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Home</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#train" role="tab">Train</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#crimes" role="tab">Crimes</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#fight" role="tab">Fight</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#jail" role="tab">Jail</a>
              </div>
        </div>
    </div>
</div>
