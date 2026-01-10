const element = document.getElementById('bounce');
element.animate([
    {transform: 'translateY(0)'},
    {transform: 'translateY(-10px)'},
    {transform: 'translateY(0)'}
],{
    duration: 700,
    iterations: 2
});
