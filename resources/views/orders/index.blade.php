@extends('layouts.app', ['activePage' => 'order', 'titlePage' => 'Orders'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--TITEL SECTION-->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Orders</h4>
                            <p class="card-category"> Here you can manage Orders</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Oner
                                            </th>
                                            <th>
                                                Area
                                            </th>
                                            <th>
                                                Accepted at
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <!--DYNAMIC INFO-->
                                    @foreach ($orders as $order)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{ $order->user_id }}
                                                </td>
                                                <td>
                                                    {{ $order->area_id }}
                                                </td>
                                                <td>
                                                    {{ $order->accepted_at }}
                                                </td>
                                                <!-- EDIT -->
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="#"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <form action="{{ route('orders.destroy', $order) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button rel="tooltip" class="btn btn-danger btn-round"
                                                            type="submit">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
