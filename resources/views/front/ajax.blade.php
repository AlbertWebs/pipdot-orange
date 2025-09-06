        <!-- Remember to include jQuery :) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script>
            $( document ).ready( function(){
               
                $('#emailChecker').hide()
            });
               
            
        </script>
                {{-- Ajax Check Here --}}
                <script>
                    function duplicateEmail(element){
                            var email = $(element).val();
                            $.ajax({
                                type: "POST",
                                url: '{{url('checkemail')}}',
                                data: {email:email,"_token": "{{ csrf_token() }}"},
                                dataType: "json",
                                success: function(res) {
                                    if(res.exists){
                                        $('#emailChecker').show()
                                    }else{
                                        // alert('false');
                                        $('#emailChecker').hide()
                                    }
                                },
                                error: function (jqXHR, exception) {
        
                                }
                            });
                        }
                </script>
                {{-- Ajax Check --}}