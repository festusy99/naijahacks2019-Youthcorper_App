<div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">{{$lodge->lodge_type}}</h4>
</div>
<div class="modal-body">
    <div class="popupMessageContainer">
             
        <p>{!! $lodge->description !!} </p>
        <p>{!! $lodge->price !!} </p>
    </div>  
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
</div>