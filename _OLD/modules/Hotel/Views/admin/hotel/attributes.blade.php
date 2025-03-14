@foreach ($attributes as $attribute)
    <div class="panel">
        <div class="panel-title"><strong>{{__('Attribute: :name',['name'=>$attribute->name])}}</strong></div>
        <?php $total=sizeof($attribute->terms);$ii=0;?>
        <input type="hidden" value="<?php echo $total;?>" id="ttTerms" name="ttTerms"/>
        <div class="panel-body">
            <div class="terms-scrollable">
                @foreach($attribute->terms as $term)
                    <?php $ii++;?>
                    <label class="term-item">
                        <input @if(!empty($selected_terms) and $selected_terms->contains($term->id)) checked @endif type="checkbox" id="terms_<?php echo $ii;?>" name="terms[]" value="{{$term->id}}">
                        <span class="term-name">{{$term->name}}</span>
                    </label>
                @endforeach
            </div>
            <p id="select_all" style="text-align: right;"><a onclick="fnselectall()" href="javascript:void(0);">Select all</a></p>
            <input type="hidden" value="1" id="flag"/>
        </div>
    </div>
    <script type="text/javascript">
        function fnselectall() {
            var tt=$('#ttTerms').val();
            if($('#flag').val()==1){
                var j=0;
                for(j=0;j<=tt;j++){
                    $('#terms_' + j).prop('checked', 'checked');
                }
                $('#flag').val(0);
                $('#select_all').html('<a onclick="fnselectall()" href="javascript:void(0);">DeSelect all</a>');
            }else{
                var j=0;
                for(j=0;j<=tt;j++){
                    $('#terms_' + j).prop('checked', '');
                }
                $('#flag').val(1);
                $('#select_all').html('<a onclick="fnselectall()" href="javascript:void(0);">Select all</a>');
            }

        }
    </script>
@endforeach
