@extends('layouts.master')

@section('content')
<div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Window Coolers</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Speakers</td>
                                <td>$620</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Hp Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Wall Fan</td>
                                <td>$110</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Adidas Shoes</td>
                                <td>$620</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Denim Shirts</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Casual Shoes</td>
                                <td>$575</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
                        <tbody>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="img1.jpg"></div></td>
                                <td><h4>David<br><span>Italy</span></h4></td>
                            </tr>
                            <tr>
                                <td><div class="imgBx"><img src="img2.jpg"></div></td>
                                <td><h4>Muhammad<br><span>India</span></h4></td>
                            </tr>
                            <tr>
                                <td><div class="imgBx"><img src="img3.jpg"></div></td>
                                <td><h4>Amelia<br><span>France</span></h4></td>
                            </tr>
                            <tr>
                                <td><div class="imgBx"><img src="img4.jpg"></div></td>
                                <td><h4>Olivia<br><span>USA</span></h4></td>
                            </tr>
                            <tr>
                                <td><div class="imgBx"><img src="img5.jpg"></div></td>
                                <td><h4>Amit<br><span>Japan</span></h4></td>
                            </tr>
                            <tr>
                                <td><div class="imgBx"><img src="img6.jpg"></div></td>
                                <td><h4>Ashraf<br><span>India</span></h4></td>
                            </tr>
                            <tr>
                                <td><div class="imgBx"><img src="img7.jpg"></div></td>
                                <td><h4>Diana<br><span>Malaysia</span></h4></td>
                            </tr>
                            <tr>
                                <td><div class="imgBx"><img src="img8.jpg"></div></td>
                                <td><h4>Amit<br><span>India</span></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
@endsection
