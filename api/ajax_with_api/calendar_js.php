<script type="text/javascript">
    $(function() {
        $('#calendar td a').click(function(event) {
            event.preventDefault();
            event.stopPropagation();
            $('calendar td div').remove();
            
            var tooltip = $('<div/>').css("position", "absolute").addClass('tooltip');
            $.AJax({
                url: this.href,
                success: function(data) {
                    tooltip.append("<p><b>Event:</b>" + data.title + "<br/><b>Date:</b>" + data.date+"</p>");
                    
                    this.parent().append(tooltip);
                }
            });
        });
    });

$('body').click(function() {
    $('#calendar td div').remove();
});


</script>