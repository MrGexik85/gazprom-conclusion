

create_report_json:
	semgrep --config=semgrep_rules.yaml --output scan_report.json --json .

scan:
	semgrep --config=semgrep_rules.yaml .