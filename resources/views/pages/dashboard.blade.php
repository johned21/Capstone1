@extends('layouts.app')

@section('content')

<div class="wrapper">
	
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <div class="logo-name">
                    Dashboard
                </div>
            </div>
            <i class='bx bx-menu' id="btn-menu"></i>
        </div>

        <ul class="nav-list">
            <li>
                <a href="">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="search...">
                </a>
                <span class="tooltip">Search</span>
            </li>

            <li>
                <a href="">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links-name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="">
                    <i class='bx bx-home'></i>
                    <span class="links-name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>

            <li>
                <a href="">
                    <i class='bx bx-info-circle'></i>
                    <span class="links-name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>

        </ul>

        <div class="logout-content fixed-bottom">
            <div class="logout">
                <div class="logout-details">
                    <div class="logout-name">Logout</div>
                </div>
                <i class='bx bx-log-out' id="logout"></i>
            </div>
        </div>
    </div>

    <div class="dashboard-content">
        <div class="text">
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 offset-md-1">

                        <table id="example" class="table table-striped table-hover table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <table id="modaldata" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr></tr>
                    </tbody>
                    </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        let btn = document.querySelector("#btn-menu");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }

        jQuery(document).ready(function($) {
        $('#example').DataTable();
        $(document).on('click', '#example tbody tr button', function() {       
            $("#modaldata tbody tr").html("");
            $("#modaldata tbody tr").html($(this).closest("tr").html());
            $("#exampleModal").modal("show");
        });
        } );        
    </script>

</div>
@endsection