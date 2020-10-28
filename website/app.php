<!DOCTYPE html>

<div class="modal " id="Appointment" tabindex="-1" role="dialog" aria-labelledby="Appointment" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Appointment"><b>Book An Appointment</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form>
    <input class="form-control input-lg" id="inputlg" type="text" placeholder="Enter full name">
    <br>
    <input class="form-control input-lg" id="inputlg" type="text" placeholder="Enter email ID">
    <br>
    <input class="form-control input-lg" id="inputlg" type="text" placeholder="Enter mobile no.">
    <br>
    <label>Prefered time : </label>
            <select  class="form-control" name="docapp" required>
              <option value=" # " >Choose...</option>
              <option value=" # " >12.00pm - 1.00pm</option>
              <option value=" # " >2.00pm - 3.00pm</option>
              <option value=" # " >4.00pm - 5.00pm</option>
              <option value=" # " >6.00pm - 7.00pm</option>
              </select>
              <br>
    <label>Your Query</label>
    <input class="form-control input-lg" id="inputlg" type="text" placeholder="Ask query">
    
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Book Appointment</button>
      </div>
    </form>
    </div>
  </div>
</div>


</html>