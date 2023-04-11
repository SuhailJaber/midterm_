@extends('layout.lay')
@section('content')

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">All Expenses</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                  <a href="create_expenses" class="btn btn-outline-secondary">Add New Expenses</a>
              </div>
      </div>
      </div>
      <div class="btn-toolbar mb-2 mb-md-0">
          <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Item</th>
                    <th>Item Category</th>
                    <th>Purchase Date</th>
                    <th>Amount</th>
                    <th width="280px">Actions</th>
                </tr>
                <tr>
                    <td>Dell Laptop</td>
                    <td>Hardware</td>
                    <td>5 Jan 2019</td>
                    <td>100 $</td>
                    <td>
                      <a class="btn btn-info" href="">Edit</a>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                  <td>MS OFFICE 2022</td>
                  <td>Material</td>
                  <td>5 Jan 2018</td>
                  <td>125 $</td>
                  <td>
                    <a class="btn btn-info" href="">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </td>
              </tr>
              <tr>
                <td>HP Laptop</td>
                <td>Hardware</td>
                <td>5 Jan 2018</td>
                <td>250 $</td>
                <td>
                  <a class="btn btn-info" href="">Edit</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
          </table>
      </div>
      </main>
    </div>
  </div>
@endsection