create_report_json:
	semgrep --config=semgrep_rules.yaml --output scan_report.json --json .

create_report_text:
	semgrep --config=semgrep_rules.yaml --output scan_report.txt --text .

scan:
	semgrep --config=semgrep_rules.yaml .