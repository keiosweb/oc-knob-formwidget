# October Knob FormWidget

**A touch friendly widget to handle numeric fields for OctoberCMS**

[jQuery Knob](https://github.com/aterrien/jQuery-Knob) wrapper for October backend forms.

Used here jQuery Knob is © 2012 Anthony Terrien under the MIT license.

The following options are supported :

**Behaviors:**
```
min : min value | default=0.
max : max value | default=100.
step : step size | default=1.
angleOffset : starting angle in degrees | default=0.
angleArc : arc size in degrees | default=360.
stopper : stop at min & max on keydown/mousewheel | default=true.
readOnly : disable input and events | default=false.
rotation : direction of progression | default=clockwise.
```

**UI:**
```
cursor : display mode "cursor", cursor size could be changed passing a numeric value to the option, default width is used when passing boolean value "true" | default=gauge.
thickness : gauge thickness.
lineCap : gauge stroke endings. | default=butt, round=rounded line endings
width : dial width.
displayInput : default=true | false=hide input.
displayPrevious : default=false | true=displays the previous value with transparency.
fgColor : foreground color.
inputColor : input value (number) color.
font : font family.
fontWeight : font weight.
bgColor : background color.
```

**October UI related:**
```
knobLabel: label to display on right side of the knob, can be translation string
knobComment: comment to display on right side of the knob, can be translation string
```

**Form configuration example**

```yaml
fields:
    age:
      knobLabel: Your current age
      knobComment: We need to know, really.
      type: knob
      span: right
      min: 1
      default: 23
      max: 100
      angleOffset: -125
      angleArc: 250
```
    
#Licence

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.