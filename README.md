# PPP Plugin for Kanboard
Generate Progress Plans and Problems (PPP) Report from Kanboard

[![CI](https://circleci.com/gh/levlaz/kanboard-plugin-ppp.svg?style=shield&circle-token=:circle-token)](https://circleci.com/gh/levlaz/kanboard-plugin-ppp)

[Kanboard Plugin Documentation](https://kanboard.net/documentation/plugins)

## Author

* Lev Lazinskiy
* License MIT

## Requirements

* Kanboard >= 1.0.29

## Installation

TODO: Add Installation Instructions

## Background
At CircleCI, which is mostly a remote company, we generate a weekly PPP report so that we can quickly communicate any issues with everyone else on our team. This is sort of like a weekly standup where you share the things you accomplished (Progress), commit to completing more tasks this week (Plans) and raise any roadblocks to the entire company (Problems).

This plugin makes it super simple to generate this type of report assuming the following:

1. You use kanboard to manage all of your PPP worthy tasks
2. You have the following columns:
  * Ready/Work In Progress (Plans)
  * Roadblocks (Problems)
  * Done (Progress)

This plugin will generate an editable report that you can email to your team, and will also automatically close anything in the Done column. This makes cleaning up the done column a simple weekly task.
