<style>
/*---------------------------------------------------------------------
    File Name: nice-select.css
---------------------------------------------------------------------*/

.nice-select {
  background-color: #f6f6f6;
  border-radius: 0;
  box-sizing: border-box;
  clear: both;
  display: block;
  float: left;
  height: auto;
  outline: none;
  padding-left: 20px;
  padding-right: 35px;
  position: relative;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  width: 50%;
  cursor: pointer;
  font-family: inherit;
  font-weight: normal;
  line-height: 50px;
  text-align: left !important;
  white-space: nowrap;
  font-weight: 300;
}

.nice-select:after {
  border-bottom: 2px solid #999;
  border-right: 2px solid #999;
  content: '';
  display: block;
  height: 5px;
  margin-top: -4px;
  pointer-events: none;
  position: absolute;
  right: 12px;
  top: 50%;
  -webkit-transform-origin: 66% 66%;
  -ms-transform-origin: 66% 66%;
  transform-origin: 66% 66%;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  -webkit-transition: all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
  width: 5px;
}

.nice-select.open:after {
  -webkit-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

.nice-select.open .list {
  opacity: 1;
  pointer-events: auto;
  -webkit-transform: scale(1) translateY(0);
  -ms-transform: scale(1) translateY(0);
  transform: scale(1) translateY(0);
}

.nice-select.disabled {
  border-color: #ededed;
  color: #999;
  pointer-events: none;
}

.nice-select.disabled:after {
  border-color: #cccccc;
}

.nice-select.wide {
  width: 100%;
}

.nice-select.wide .list {
  left: 0 !important;
  right: 0 !important;
}

.nice-select.right {
  float: right;
}

.nice-select.right .list {
  left: auto;
  right: 0;
}

.nice-select.small {
  font-size: 12px;
  height: 36px;
  line-height: 34px;
}

.nice-select.small:after {
  height: 4px;
  width: 4px;
}

.nice-select.small .option {
  line-height: 34px;
  min-height: 34px;
}

.nice-select .list {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 0 1px rgba(68, 68, 68, 0.11);
  box-sizing: border-box;
  margin-top: 4px;
  opacity: 0;
  overflow: hidden;
  padding: 0;
  pointer-events: none;
  position: absolute;
  top: 100%;
  left: 0;
  -webkit-transform-origin: 50% 0;
  -ms-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transform: scale(0.75) translateY(-21px);
  -ms-transform: scale(0.75) translateY(-21px);
  transform: scale(0.75) translateY(-21px);
  -webkit-transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
  transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
  z-index: 9;
}

.nice-select .list:hover .option:not(:hover) {
  background-color: transparent !important;
}

.nice-select .option {
  cursor: pointer;
  font-weight: 400;
  line-height: 40px;
  list-style: none;
  min-height: 40px;
  outline: none;
  padding-left: 18px;
  padding-right: 29px;
  text-align: left;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.nice-select .option:hover,
.nice-select .option.focus,
.nice-select .option.selected.focus {
  background-color: #f6f6f6;
}

.nice-select .option.selected {
  font-weight: bold;
}

.nice-select .option.disabled {
  background-color: transparent;
  color: #999;
  cursor: default;
}

.no-csspointerevents .nice-select .list {
  display: none;
}

.no-csspointerevents .nice-select.open .list {
  display: block;
}
</style>
